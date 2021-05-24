<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Etablissement;

/**
 * EtablissementSearch represents the model behind the search form of `app\models\Etablissement`.
 */
class EtablissementSearch extends Etablissement
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Etablissement'], 'integer'],
            [['Ville', 'Région', 'Pays', 'Num_Classe'], 'safe'],
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
        ]);

        $query->andFilterWhere(['like', 'Ville', $this->Ville])
            ->andFilterWhere(['like', 'Région', $this->Région])
            ->andFilterWhere(['like', 'Pays', $this->Pays])
            ->andFilterWhere(['like', 'Num_Classe', $this->Num_Classe]);

        return $dataProvider;
    }
}
