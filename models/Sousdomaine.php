<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sousdomaine".
 *
 * @property int $Num_sous_domaine
 * @property int $Libellé_sous_domaine
 * @property int $Num_Competence
 *
 * @property Domaine[] $domaines
 * @property Competence $numCompetence
 */
class Sousdomaine extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sousdomaine';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_sous_domaine', 'Libellé_sous_domaine', 'Num_Competence'], 'required'],
            [['Num_sous_domaine', 'Libellé_sous_domaine', 'Num_Competence'], 'integer'],
            [['Num_sous_domaine'], 'unique'],
            [['Num_Competence'], 'exist', 'skipOnError' => true, 'targetClass' => Competence::className(), 'targetAttribute' => ['Num_Competence' => 'Num_Competence']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_sous_domaine' => 'Numéro du Sous-Domaine',
            'Libellé_sous_domaine' => 'Libellé du Sous-Domaine',
            'Num_Competence' => 'Numéro de la Competence',
        ];
    }

    /**
     * Gets query for [[Domaines]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDomaines()
    {
        return $this->hasMany(Domaine::className(), ['Num_sous_domaine' => 'Num_sous_domaine']);
    }

    /**
     * Gets query for [[NumCompetence]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumCompetence()
    {
        return $this->hasOne(Competence::className(), ['Num_Competence' => 'Num_Competence']);
    }
}
