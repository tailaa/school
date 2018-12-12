<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Faces;

/**
 * FacesSearch represents the model behind the search form of `app\models\Faces`.
 */
class FacesSearch extends Faces
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Surname', 'Name', 'DadName', 'Work', 'KuzstuWorker'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Faces::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'Surname', $this->Surname])
            ->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'DadName', $this->DadName])
            ->andFilterWhere(['like', 'Work', $this->Work])
            ->andFilterWhere(['like', 'KuzstuWorker', $this->KuzstuWorker]);

        return $dataProvider;
    }
}
