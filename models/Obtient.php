<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obtient".
 *
 * @property string $Date_acquisition
 * @property int $Num_Competence
 * @property int $Num_Eleve
 *
 * @property Competence $numCompetence
 * @property Eleve $numEleve
 */
class Obtient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obtient';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Date_acquisition', 'Num_Competence', 'Num_Eleve'], 'required'],
            [['Date_acquisition'], 'safe'],
            [['Num_Competence', 'Num_Eleve'], 'integer'],
            [['Date_acquisition'], 'unique'],
            [['Num_Competence'], 'exist', 'skipOnError' => true, 'targetClass' => Competence::className(), 'targetAttribute' => ['Num_Competence' => 'Num_Competence']],
            [['Num_Eleve'], 'exist', 'skipOnError' => true, 'targetClass' => Eleve::className(), 'targetAttribute' => ['Num_Eleve' => 'Num_Eleve']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Date_acquisition' => "Date d'Acquisition",
            'Num_Competence' => 'Numéro de la compétence',
            'Num_Eleve' => "Numéro de l'élève",
        ];
    }

    /**
     * Gets query for [[NumCompetence]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumCompetence()
    {
        return $this->hasOne(Competence::className(), ['Num_Competence' => 'Num_Competence']);
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
