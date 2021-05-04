<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sederoule".
 *
 * @property int $Num_Classe
 * @property int $Num_Annee
 *
 * @property Classe $numClasse
 * @property Annee $numAnnee
 */
class Sederoule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sederoule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Classe', 'Num_Annee'], 'required'],
            [['Num_Classe', 'Num_Annee'], 'integer'],
            [['Num_Classe', 'Num_Annee'], 'unique', 'targetAttribute' => ['Num_Classe', 'Num_Annee']],
            [['Num_Classe'], 'exist', 'skipOnError' => true, 'targetClass' => Classe::className(), 'targetAttribute' => ['Num_Classe' => 'Num_Classe']],
            [['Num_Annee'], 'exist', 'skipOnError' => true, 'targetClass' => Annee::className(), 'targetAttribute' => ['Num_Annee' => 'Num_annee']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_Classe' => 'Numéro de la classe',
            'Num_Annee' => 'Numéro Année',
        ];
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

    /**
     * Gets query for [[NumAnnee]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumAnnee()
    {
        return $this->hasOne(Annee::className(), ['Num_annee' => 'Num_Annee']);
    }
}
