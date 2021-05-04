<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lier".
 *
 * @property int $Num_Eleve
 * @property int $Num_Section
 *
 * @property Section $numSection
 * @property Eleve $numEleve
 */
class Lier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Eleve', 'Num_Section'], 'required'],
            [['Num_Eleve', 'Num_Section'], 'integer'],
            [['Num_Eleve', 'Num_Section'], 'unique', 'targetAttribute' => ['Num_Eleve', 'Num_Section']],
            [['Num_Section'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['Num_Section' => 'Num_Section']],
            [['Num_Eleve'], 'exist', 'skipOnError' => true, 'targetClass' => Eleve::className(), 'targetAttribute' => ['Num_Eleve' => 'Num_Eleve']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_Eleve' => "Numéro de l'élève",
            'Num_Section' => 'Numéro de la Séction',
        ];
    }

    /**
     * Gets query for [[NumSection]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumSection()
    {
        return $this->hasOne(Section::className(), ['Num_Section' => 'Num_Section']);
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
}
