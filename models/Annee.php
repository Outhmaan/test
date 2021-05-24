<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "annee".
 *
 * @property int $Num_annee
 * @property string $Libelle_année
 *
 * @property Sederoule[] $sederoules
 * @property Classe[] $numClasses
 */
class Annee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'annee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Libelle_année'], 'required'],
            [['Libelle_année'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_annee' => 'Num Annee',
            'Libelle_année' => 'Libelle Année',
        ];
    }

    /**
     * Gets query for [[Sederoules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSederoules()
    {
        return $this->hasMany(Sederoule::className(), ['Num_Annee' => 'Num_annee']);
    }

    /**
     * Gets query for [[NumClasses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumClasses()
    {
        return $this->hasMany(Classe::className(), ['Num_Classe' => 'Num_Classe'])->viaTable('sederoule', ['Num_Annee' => 'Num_annee']);
    }
}
