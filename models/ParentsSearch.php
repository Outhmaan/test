<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Parents;

/**
 * ParentsSearch represents the model behind the search form of `app\models\Parents`.
 */
class ParentsSearch extends Parents
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Parent'], 'integer'],
            [['Nom_Parent', 'Prenom_Parent', 'Telephone_Parent', 'Rue_Parent', 'Localite_Parent'], 'safe'],
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
        $query = Parents::find();

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
            'Num_Parent' => $this->Num_Parent,
        ]);

        $query->andFilterWhere(['like', 'Nom_Parent', $this->Nom_Parent])
            ->andFilterWhere(['like', 'Prenom_Parent', $this->Prenom_Parent])
            ->andFilterWhere(['like', 'Telephone_Parent', $this->Telephone_Parent])
            ->andFilterWhere(['like', 'Rue_Parent', $this->Rue_Parent])
            ->andFilterWhere(['like', 'Localite_Parent', $this->Localite_Parent]);

        return $dataProvider;
    }
}
