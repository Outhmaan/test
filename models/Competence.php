<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "competence".
 *
 * @property int $Num_Competence
 * @property int $Libelle_Competence
 *
 * @property Obtient[] $obtients
 * @property SousDomaine[] $sousDomaines
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
            [['Num_Competence', 'Libelle_Competence'], 'required'],
            [['Num_Competence', 'Libelle_Competence'], 'integer'],
            [['Num_Competence'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_Competence' => 'Numéro de la compétence',
            'Libelle_Competence' => 'Libellé de la compétence',
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
     * Gets query for [[SousDomaines]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSousDomaines()
    {
        return $this->hasMany(SousDomaine::className(), ['Num_Competence' => 'Num_Competence']);
    }
}
