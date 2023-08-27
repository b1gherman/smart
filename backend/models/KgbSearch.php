<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Kgb;

/**
 * KgbSearch represents the model behind the search form of `backend\models\Kgb`.
 */
class KgbSearch extends Kgb
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'idpegawai', 'idsklama', 'masakerjabarutahun', 'masakerjabarubulan', 'golonganbaru', 'ttd1'], 'integer'],
            [['nomor', 'lampiran', 'tanggalbaru', 'tembusan', 'create_at', 'update_at'], 'safe'],
            [['gapokbaru'], 'number'],
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
        $query = Kgb::find();

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
            'idpegawai' => $this->idpegawai,
            'idsklama' => $this->idsklama,
            'gapokbaru' => $this->gapokbaru,
            'masakerjabarutahun' => $this->masakerjabarutahun,
            'masakerjabarubulan' => $this->masakerjabarubulan,
            'golonganbaru' => $this->golonganbaru,
            'tanggalbaru' => $this->tanggalbaru,
            'ttd1' => $this->ttd1,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
        ]);

        $query->andFilterWhere(['like', 'nomor', $this->nomor])
            ->andFilterWhere(['like', 'lampiran', $this->lampiran])
            ->andFilterWhere(['like', 'tembusan', $this->tembusan]);

        return $dataProvider;
    }
}
