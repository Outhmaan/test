<?php

namespace app;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Etablissement;

/**
 * modelsEtablissementSearch represents the model behind the search form of `app\models\Etablissement`.
 */
class modelsEtablissementSearch extends Etablissement
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Etablissement', 'Num_Classe'], 'integer'],
            [['Ville', 'Region', 'Pays'], 'safe'],
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
        $query = Etablissement::find();

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
            'Num_Etablissement' => $this->Num_Etablissement,
            'Num_Classe' => $this->Num_Classe,
        ]);

        $query->andFilterWhere(['like', 'Ville', $this->Ville])
            ->andFilterWhere(['like', 'Region', $this->Region])
            ->andFilterWhere(['like', 'Pays', $this->Pays]);

        return $dataProvider;
    }
}
