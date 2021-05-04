<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "annee".
 *
 * @property int $Num_annee
 *
 * @property SeDeroule[] $seDeroules
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
            [['Num_annee'], 'required'],
            [['Num_annee'], 'integer'],
            [['Num_annee'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_annee' => 'Numéro Année',
        ];
    }

    /**
     * Gets query for [[SeDeroules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeDeroules()
    {
        return $this->hasMany(SeDeroule::className(), ['Num_annee' => 'Num_annee']);
    }
}
