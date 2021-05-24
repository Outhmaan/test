<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eleve".
 *
 * @property int $Num_eleve
 * @property string $Nom_Eleve
 * @property string $Prenom_Eleve
 * @property string $Date_Naiss_Eleve
 * @property string $Lieu_Naiss_Eleve
 * @property string $Rue_Eleve
 * @property string $Ville_Eleve
 * @property int $Code_Postal_Eleve
 * @property string $Num_Classe
 *
 * @property Contient[] $contients
 * @property Classe $numClasse
 * @property Lier[] $liers
 * @property Section[] $numSections
 * @property Obtient[] $obtients
 * @property Responsable[] $responsables
 * @property Parents[] $numParents
 */
class Eleve extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eleve';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nom_Eleve', 'Prenom_Eleve', 'Date_Naiss_Eleve', 'Lieu_Naiss_Eleve', 'Rue_Eleve', 'Ville_Eleve', 'Code_Postal_Eleve', 'Num_Classe'], 'required'],
            [['Nom_Eleve', 'Prenom_Eleve', 'Lieu_Naiss_Eleve', 'Rue_Eleve', 'Ville_Eleve'], 'string'],
            [['Date_Naiss_Eleve'], 'safe'],
            [['Code_Postal_Eleve'], 'integer'],
            [['Num_Classe'], 'string', 'max' => 50],
            [['Num_Classe'], 'exist', 'skipOnError' => true, 'targetClass' => Classe::className(), 'targetAttribute' => ['Num_Classe' => 'Num_Classe']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Num_eleve' => 'Num Eleve',
            'Nom_Eleve' => 'Nom Eleve',
            'Prenom_Eleve' => 'Prenom Eleve',
            'Date_Naiss_Eleve' => 'Date Naiss Eleve',
            'Lieu_Naiss_Eleve' => 'Lieu Naiss Eleve',
            'Rue_Eleve' => 'Rue Eleve',
            'Ville_Eleve' => 'Ville Eleve',
            'Code_Postal_Eleve' => 'Code Postal Eleve',
            'Num_Classe' => 'Num Classe',
        ];
    }

    /**
     * Gets query for [[Contients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContients()
    {
        return $this->hasMany(Contient::className(), ['Num_Eleve' => 'Num_eleve']);
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

    /**
     * Gets query for [[Liers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLiers()
    {
        return $this->hasMany(Lier::className(), ['Num_Eleve' => 'Num_eleve']);
    }

    /**
     * Gets query for [[NumSections]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumSections()
    {
        return $this->hasMany(Section::className(), ['Num_Section' => 'Num_Section'])->viaTable('lier', ['Num_Eleve' => 'Num_eleve']);
    }

    /**
     * Gets query for [[Obtients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObtients()
    {
        return $this->hasMany(Obtient::className(), ['Num_Eleve' => 'Num_eleve']);
    }

    /**
     * Gets query for [[Responsables]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResponsables()
    {
        return $this->hasMany(Responsable::className(), ['Num_Eleve' => 'Num_eleve']);
    }

    /**
     * Gets query for [[NumParents]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumParents()
    {
        return $this->hasMany(Parents::className(), ['Num_Parent' => 'Num_Parent'])->viaTable('responsable', ['Num_Eleve' => 'Num_eleve']);
    }
}
