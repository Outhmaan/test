<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enseignant".
 *
 * @property int $Num_Enseignant
 * @property string $Nom_Enseignant
 * @property string $Prénom_Enseignant
 *
 * @property Enseigne[] $enseignes
 */
class Enseignant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enseignant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Enseignant', 'Nom_Enseignant', 'Prénom_Enseignant'], 'required'],
            [['Num_Enseignant'], 'integer'],
            [['Nom_Enseignant', 'Prénom_Enseignant'], 'string'],
            [['Num_Enseignant'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_Enseignant' => 'Num Enseignant',
            'Nom_Enseignant' => 'Nom Enseignant',
            'Prénom_Enseignant' => 'Prénom Enseignant',
        ];
    }

    /**
     * Gets query for [[Enseignes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEnseignes()
    {
        return $this->hasMany(Enseigne::className(), ['Num_Enseignant' => 'Num_Enseignant']);
    }
}
