<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "competence".
 *
 * @property int $Num_Competence
 * @property string $Libelle_Competence
 *
 * @property Obtient[] $obtients
 * @property Sousdomaine[] $sousdomaines
 */
class Competence extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'competence';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Libelle_Competence'], 'required'],
            [['Libelle_Competence'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_Competence' => 'Num Competence',
            'Libelle_Competence' => 'Libelle Competence',
        ];
    }

    /**
     * Gets query for [[Obtients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObtients()
    {
        return $this->hasMany(Obtient::className(), ['Num_Competence' => 'Num_Competence']);
    }

    /**
     * Gets query for [[Sousdomaines]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSousdomaines()
    {
        return $this->hasMany(Sousdomaine::className(), ['Num_Competence' => 'Num_Competence']);
    }
}
