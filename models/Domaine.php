<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "domaine".
 *
 * @property int $Num_domaine
 * @property int $Libellé_domaine
 * @property int $Num_sous_domaine
 *
 * @property Sousdomaine $numSousDomaine
 */
class Domaine extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'domaine';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_domaine', 'Libellé_domaine', 'Num_sous_domaine'], 'required'],
            [['Num_domaine', 'Libellé_domaine', 'Num_sous_domaine'], 'integer'],
            [['Num_domaine'], 'unique'],
            [['Num_sous_domaine'], 'exist', 'skipOnError' => true, 'targetClass' => Sousdomaine::className(), 'targetAttribute' => ['Num_sous_domaine' => 'Num_sous_domaine']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_domaine' => 'Numéro du Domaine',
            'Libellé_domaine' => 'Libellé du Domaine',
            'Num_sous_domaine' => 'Numéro du Sous-Domaine',
        ];
    }

    /**
     * Gets query for [[NumSousDomaine]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumSousDomaine()
    {
        return $this->hasOne(Sousdomaine::className(), ['Num_sous_domaine' => 'Num_sous_domaine']);
    }
}
