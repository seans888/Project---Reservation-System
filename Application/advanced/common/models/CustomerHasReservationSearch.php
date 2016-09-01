<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\CustomerHasReservation;

/**
 * CustomerHasReservationSearch represents the model behind the search form about `common\models\CustomerHasReservation`.
 */
class CustomerHasReservationSearch extends CustomerHasReservation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'reservation_id', 'customer_id'], 'integer'],
            [['date_of_arrival', 'date_of_departure', 'desired_room_type', 'requests'], 'safe'],
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
        $query = CustomerHasReservation::find();

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
            'date_of_arrival' => $this->date_of_arrival,
            'date_of_departure' => $this->date_of_departure,
            'reservation_id' => $this->reservation_id,
            'customer_id' => $this->customer_id,
        ]);

        $query->andFilterWhere(['like', 'desired_room_type', $this->desired_room_type])
            ->andFilterWhere(['like', 'requests', $this->requests]);

        return $dataProvider;
    }
}
