<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sederoule;

/**
 * SederouleSearch represents the model behind the search form of `app\models\Sederoule`.
 */
class SederouleSearch extends Sederoule
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Classe', 'Num_Annee'], 'integer'],
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
        $query = Sederoule::find();

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
            'Num_Classe' => $this->Num_Classe,
            'Num_Annee' => $this->Num_Annee,
        ]);

        return $dataProvider;
    }
}
