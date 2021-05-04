<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parents".
 *
 * @property int $Num_Parent
 * @property string $Nom_Parent
 * @property string $Prenom_Parent
 * @property int $Telephone_Parent
 * @property string $Rue_Parent
 * @property string $Ville_Parent
 * @property int $Code_Postal_Parent
 *
 * @property EstResponsable[] $estResponsables
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
            [['Num_Parent', 'Nom_Parent', 'Prenom_Parent', 'Telephone_Parent', 'Rue_Parent', 'Ville_Parent', 'Code_Postal_Parent'], 'required'],
            [['Num_Parent', 'Telephone_Parent', 'Code_Postal_Parent'], 'integer'],
            [['Nom_Parent', 'Prenom_Parent', 'Rue_Parent', 'Ville_Parent'], 'string'],
            [['Num_Parent'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_Parent' => 'Numéro Parent',
            'Nom_Parent' => 'Nom',
            'Prenom_Parent' => 'Prénom',
            'Telephone_Parent' => 'Telephone',
            'Rue_Parent' => 'Rue',
            'Ville_Parent' => 'Ville',
            'Code_Postal_Parent' => 'Code Postal',
        ];
    }

    /**
     * Gets query for [[EstResponsables]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEstResponsables()
    {
        return $this->hasMany(EstResponsable::className(), ['Num_parent' => 'Num_Parent']);
    }
}
