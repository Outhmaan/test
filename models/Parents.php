<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parents".
 *
 * @property int $Num_Parent
 * @property string $Nom_Parent
 * @property string $Prenom_Parent
 * @property string $Telephone_Parent
 * @property string $Rue_Parent
 * @property string $Localite_Parent
 *
 * @property Responsable[] $responsables
 * @property Eleve[] $numEleves
 */
class Parents extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nom_Parent', 'Prenom_Parent', 'Telephone_Parent', 'Rue_Parent', 'Localite_Parent'], 'required'],
            [['Nom_Parent', 'Prenom_Parent', 'Rue_Parent'], 'string'],
            [['Telephone_Parent', 'Localite_Parent'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_Parent' => 'Num Parent',
            'Nom_Parent' => 'Nom Parent',
            'Prenom_Parent' => 'Prenom Parent',
            'Telephone_Parent' => 'Telephone Parent',
            'Rue_Parent' => 'Rue Parent',
            'Localite_Parent' => 'Localite Parent',
        ];
    }

    /**
     * Gets query for [[Responsables]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResponsables()
    {
        return $this->hasMany(Responsable::className(), ['Num_Parent' => 'Num_Parent']);
    }

    /**
     * Gets query for [[NumEleves]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumEleves()
    {
        return $this->hasMany(Eleve::className(), ['Num_eleve' => 'Num_Eleve'])->viaTable('responsable', ['Num_Parent' => 'Num_Parent']);
    }
}
