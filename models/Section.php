<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "section".
 *
 * @property int $Num_Section
 * @property string $Libellé_sec
 *
 * @property Lier[] $liers
 * @property Relier[] $reliers
 */
class Section extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Section', 'Libellé_sec'], 'required'],
            [['Num_Section'], 'integer'],
            [['Libellé_sec'], 'string'],
            [['Num_Section'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_Section' => 'Numéro de la Séction',
            'Libellé_sec' => 'Libellé de la Séction',
        ];
    }

    /**
     * Gets query for [[Liers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLiers()
    {
        return $this->hasMany(Lier::className(), ['Num_Section' => 'Num_Section']);
    }

    /**
     * Gets query for [[Reliers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReliers()
    {
        return $this->hasMany(Relier::className(), ['Num_section' => 'Num_Section']);
    }
}
