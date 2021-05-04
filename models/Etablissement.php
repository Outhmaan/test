<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "etablissement".
 *
 * @property int $Num_Etablissement
 * @property string $Ville
 * @property string $Region
 * @property string $Pays
 * @property int $Num_Classe
 *
 * @property Classe $numClasse
 */
class Etablissement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'etablissement';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Etablissement', 'Ville', 'Region', 'Pays', 'Num_Classe'], 'required'],
            [['Num_Etablissement', 'Num_Classe'], 'integer'],
            [['Ville', 'Region', 'Pays'], 'string'],
            [['Num_Etablissement'], 'unique'],
            [['Num_Classe'], 'exist', 'skipOnError' => true, 'targetClass' => Classe::className(), 'targetAttribute' => ['Num_Classe' => 'Num_Classe']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_Etablissement' => 'Num Etablissement',
            'Ville' => 'Ville',
            'Region' => 'Region',
            'Pays' => 'Pays',
            'Num_Classe' => 'Num Classe',
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
}
