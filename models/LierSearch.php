<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Lier;

/**
 * LierSearch represents the model behind the search form of `app\models\Lier`.
 */
class LierSearch extends Lier
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Eleve', 'Num_Section'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Lier::find();

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
            'Num_Eleve' => $this->Num_Eleve,
            'Num_Section' => $this->Num_Section,
        ]);

        return $dataProvider;
    }
}
