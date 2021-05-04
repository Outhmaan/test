<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "relier".
 *
 * @property int $Num_Classe
 * @property int $Num_Section
 *
 * @property Classe $numClasse
 * @property Section $numSection
 */
class Relier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'relier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Classe', 'Num_Section'], 'required'],
            [['Num_Classe', 'Num_Section'], 'integer'],
            [['Num_Classe', 'Num_Section'], 'unique', 'targetAttribute' => ['Num_Classe', 'Num_Section']],
            [['Num_Classe'], 'exist', 'skipOnError' => true, 'targetClass' => Classe::className(), 'targetAttribute' => ['Num_Classe' => 'Num_Classe']],
            [['Num_Section'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['Num_Section' => 'Num_Section']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_Classe' => 'Numéro de la classe',
            'Num_Section' => 'Numéro de la Séction',
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
     * Gets query for [[NumSection]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumSection()
    {
        return $this->hasOne(Section::className(), ['Num_Section' => 'Num_Section']);
    }
}
