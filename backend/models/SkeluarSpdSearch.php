<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SkeluarSpd;

/**
 * SkeluarSpdSearch represents the model behind the search form of `backend\models\SkeluarSpd`.
 */
class SkeluarSpdSearch extends SkeluarSpd
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idppk', 'idppd','idsurattugas','idtemplate', 'lama', 'idanggaran_instansi', 'iduser'], 'integer'],
            [['nomor', 'tingkat_biaya', 'maksud', 'alat_angkut', 'tempat_berangkat', 'tujuan', 'tgl_berangkat', 'tgl_kembali', 'anggaran_akun', 'keterangan_lain', 'tempat', 'tanggal', 'status', 'file_upload', 'create_at', 'update_at'], 'safe'],
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
        $query = SkeluarSpd::find();

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
            'idppk' => $this->idppk,
            'idppd' => $this->idppd,
            'idsurattugas' => $this->idsurattugas,
            'lama' => $this->lama,
            'tgl_berangkat' => $this->tgl_berangkat,
            'tgl_kembali' => $this->tgl_kembali,
            'idanggaran_instansi' => $this->idanggaran_instansi,
            'tanggal' => $this->tanggal,
            'idtemplate' => $this->idtemplate,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'iduser' => $this->iduser,
        ]);

        $query->andFilterWhere(['like', 'nomor', $this->nomor])
            ->andFilterWhere(['like', 'tingkat_biaya', $this->tingkat_biaya])
            ->andFilterWhere(['like', 'maksud', $this->maksud])
            ->andFilterWhere(['like', 'alat_angkut', $this->alat_angkut])
            ->andFilterWhere(['like', 'tempat_berangkat', $this->tempat_berangkat])
            ->andFilterWhere(['like', 'tujuan', $this->tujuan])
            ->andFilterWhere(['like', 'anggaran_akun', $this->anggaran_akun])
            ->andFilterWhere(['like', 'keterangan_lain', $this->keterangan_lain])
            ->andFilterWhere(['like', 'tempat', $this->tempat])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'file_upload', $this->file_upload]);

        return $dataProvider;
    }
}
