<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "responsable".
 *
 * @property int $Num_Eleve
 * @property int $Num_Parent
 *
 * @property Parents $numParent
 * @property Eleve $numEleve
 */
class Responsable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'responsable';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Num_Eleve', 'Num_Parent'], 'required'],
            [['Num_Eleve', 'Num_Parent'], 'integer'],
            [['Num_Eleve', 'Num_Parent'], 'unique', 'targetAttribute' => ['Num_Eleve', 'Num_Parent']],
            [['Num_Parent'], 'exist', 'skipOnError' => true, 'targetClass' => Parents::className(), 'targetAttribute' => ['Num_Parent' => 'Num_Parent']],
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
            'Num_Parent' => 'Numéro Parent',
        ];
    }

    /**
     * Gets query for [[NumParent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumParent()
    {
        return $this->hasOne(Parents::className(), ['Num_Parent' => 'Num_Parent']);
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
