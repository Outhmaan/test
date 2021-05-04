<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contient".
 *
 * @property int $Num_Eleve
 * @property int $Num_Classe
 *
 * @property Eleve $numEleve
 * @property Classe $numClasse
 */
class Contient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contient';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Eleve', 'Num_Classe'], 'required'],
            [['Num_Eleve', 'Num_Classe'], 'integer'],
            [['Num_Eleve', 'Num_Classe'], 'unique', 'targetAttribute' => ['Num_Eleve', 'Num_Classe']],
            [['Num_Eleve'], 'exist', 'skipOnError' => true, 'targetClass' => Eleve::className(), 'targetAttribute' => ['Num_Eleve' => 'Num_Eleve']],
            [['Num_Classe'], 'exist', 'skipOnError' => true, 'targetClass' => Classe::className(), 'targetAttribute' => ['Num_Classe' => 'Num_Classe']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_Eleve' => "Numéro de l'élève",
            'Num_Classe' => 'Numéro de la Classe',
        ];
    }

    /**
     * Gets query for [[NumEleve]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumEleve()
    {
        return $this->hasOne(Eleve::className(), ['Num_Eleve' => 'Num_Eleve']);
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
