<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Billingstatement;

/**
 * BillingstatementSearch represents the model behind the search form about `common\models\Billingstatement`.
 */
class BillingstatementSearch extends Billingstatement
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'employee_id', 'customer_id'], 'integer'],
            [['mode_of_payment', 'date_of_payment', 'status'], 'safe'],
            [['amount'], 'number'],
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
        $query = Billingstatement::find();

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
        //    'id' => $this->id,
            'amount' => $this->amount,
            'date_of_payment' => $this->date_of_payment,
            'employee_id' => $this->employee_id,
            'customer_id' => $this->customer_id,
        ]);

        $query->andFilterWhere(['like', 'mode_of_payment', $this->mode_of_payment])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
