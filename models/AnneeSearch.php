<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Annee;

/**
 * AnneeSearch represents the model behind the search form of `app\models\Annee`.
 */
class AnneeSearch extends Annee
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_annee'], 'integer'],
            [['Libelle_année'], 'safe'],
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
        $query = Annee::find();

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
            'Num_annee' => $this->Num_annee,
        ]);

        $query->andFilterWhere(['like', 'Libelle_année', $this->Libelle_année]);

        return $dataProvider;
    }
}
