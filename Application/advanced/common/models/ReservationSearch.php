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
            [['id', 'number_of_days', 'online_id', 'walkin_id'], 'integer'],
            [['date_reserved', 'down_payment', 'receipt_number'], 'safe'],
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
            'date_reserved' => $this->date_reserved,
            'number_of_days' => $this->number_of_days,
            'online_id' => $this->online_id,
            'walkin_id' => $this->walkin_id,
        ]);

        $query->andFilterWhere(['like', 'down_payment', $this->down_payment])
            ->andFilterWhere(['like', 'receipt_number', $this->receipt_number]);

        return $dataProvider;
    }
}
