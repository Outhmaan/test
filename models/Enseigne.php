<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enseigne".
 *
 * @property int $Num_Enseignant
 * @property int $Num_Classe
 *
 * @property Etablissement $numEnseignant
 * @property Classe $numClasse
 */
class Enseigne extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enseigne';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Enseignant', 'Num_Classe'], 'required'],
            [['Num_Enseignant', 'Num_Classe'], 'integer'],
            [['Num_Enseignant', 'Num_Classe'], 'unique', 'targetAttribute' => ['Num_Enseignant', 'Num_Classe']],
            [['Num_Enseignant'], 'exist', 'skipOnError' => true, 'targetClass' => Etablissement::className(), 'targetAttribute' => ['Num_Enseignant' => 'Num_Etablissement']],
            [['Num_Classe'], 'exist', 'skipOnError' => true, 'targetClass' => Classe::className(), 'targetAttribute' => ['Num_Classe' => 'Num_Classe']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_Enseignant' => "Numéro de l'enseignant",
            'Num_Classe' => 'Numéro de la classe',
        ];
    }

    /**
     * Gets query for [[NumEnseignant]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumEnseignant()
    {
        return $this->hasOne(Etablissement::className(), ['Num_Etablissement' => 'Num_Enseignant']);
    }

    /**
     * Gets query for [[NumClasse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumClasse()
    {
        return $this->hasOne(Classe::className(), ['Num_Classe' => 'Num_Classe']);
    }
}
