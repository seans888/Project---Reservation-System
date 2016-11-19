<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Reservation;

/**
 * ReservationSearch represents the model behind the search form about `common\models\Reservation`.
 */
class ReservationSearch extends Reservation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'billingstatement_id'], 'integer'],
            [['reservation_date', 'check_in', 'check_out', 'rooms', 'adults', 'kids'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Reservation::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'reservation_date' => $this->reservation_date,
            'check_in' => $this->check_in,
            'check_out' => $this->check_out,
            'billingstatement_id' => $this->billingstatement_id,
        ]);

        $query->andFilterWhere(['like', 'rooms', $this->rooms])
            ->andFilterWhere(['like', 'adults', $this->adults])
            ->andFilterWhere(['like', 'kids', $this->kids]);

        return $dataProvider;
    }
}
