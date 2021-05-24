<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Eleve;

/**
 * EleveSearch represents the model behind the search form of `app\models\Eleve`.
 */
class EleveSearch extends Eleve
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_eleve', 'Code_Postal_Eleve'], 'integer'],
            [['Nom_Eleve', 'Prenom_Eleve', 'Date_Naiss_Eleve', 'Lieu_Naiss_Eleve', 'Rue_Eleve', 'Ville_Eleve', 'Num_Classe'], 'safe'],
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
        $query = Eleve::find();

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
            'Num_eleve' => $this->Num_eleve,
            'Date_Naiss_Eleve' => $this->Date_Naiss_Eleve,
            'Code_Postal_Eleve' => $this->Code_Postal_Eleve,
        ]);

        $query->andFilterWhere(['like', 'Nom_Eleve', $this->Nom_Eleve])
            ->andFilterWhere(['like', 'Prenom_Eleve', $this->Prenom_Eleve])
            ->andFilterWhere(['like', 'Lieu_Naiss_Eleve', $this->Lieu_Naiss_Eleve])
            ->andFilterWhere(['like', 'Rue_Eleve', $this->Rue_Eleve])
            ->andFilterWhere(['like', 'Ville_Eleve', $this->Ville_Eleve])
            ->andFilterWhere(['like', 'Num_Classe', $this->Num_Classe]);

        return $dataProvider;
    }
}
