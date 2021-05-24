<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enseignant".
 *
 * @property int $Num_Enseignant
 * @property string $Nom
 * @property string $Prenom
 *
 * @property Enseigne[] $enseignes
 * @property Classe[] $numClasses
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
            [['Nom', 'Prenom'], 'required'],
            [['Nom', 'Prenom'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_Enseignant' => 'Num Enseignant',
            'Nom' => 'Nom',
            'Prenom' => 'Prenom',
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

    /**
     * Gets query for [[NumClasses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumClasses()
    {
        return $this->hasMany(Classe::className(), ['Num_Classe' => 'Num_Classe'])->viaTable('enseigne', ['Num_Enseignant' => 'Num_Enseignant']);
    }
}
