<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Room;

/**
 * RoomSearch represents the model behind the search form about `common\models\Room`.
 */
class RoomSearch extends Room
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'billingstatement_id'], 'integer'],
            [['type', 'rate', 'capacity', 'availability'], 'safe'],
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
        $query = Room::find();

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
            'billingstatement_id' => $this->billingstatement_id,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'rate', $this->rate])
            ->andFilterWhere(['like', 'capacity', $this->capacity])
            ->andFilterWhere(['like', 'availability', $this->availability]);

        return $dataProvider;
    }
}
