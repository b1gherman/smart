<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pegawai;

/**
 * PegawaiSearch represents the model behind the search form of `backend\models\Pegawai`.
 */
class PegawaiSearch extends Pegawai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nip', 'npwp', 'hp', 'id_agama', 'gajipokok', 'iduser'], 'integer'],
            [['nip', 'npwp', 'hp'], 'string'],
            [['namapegawai', 'jeniskelamin', 'statuskepegawaian', 'no_serikarpeg', 'tempatlahir', 'tgllahir', 'alamat', 'berkalaakhir', 'statuskawin', 'email', 'catmutasi', 'create_at', 'update_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Pegawai::find();

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
            'nip' => $this->nip,
            'npwp' => $this->npwp,
            'tgllahir' => $this->tgllahir,
            'hp' => $this->hp,
            'id_agama' => $this->id_agama,
            'gajipokok' => $this->gajipokok,
            'berkalaakhir' => $this->berkalaakhir,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'iduser' => $this->iduser,
            'aktif' => $this->aktif
        ]);

        $query->andFilterWhere(['like', 'namapegawai', $this->namapegawai])
            ->andFilterWhere(['like', 'jeniskelamin', $this->jeniskelamin])
            ->andFilterWhere(['like', 'statuskepegawaian', $this->statuskepegawaian])
            ->andFilterWhere(['like', 'no_serikarpeg', $this->no_serikarpeg])
            ->andFilterWhere(['like', 'tempatlahir', $this->tempatlahir])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'statuskawin', $this->statuskawin])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'catmutasi', $this->catmutasi]);

        return $dataProvider;
    }
}
