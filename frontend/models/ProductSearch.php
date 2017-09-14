<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Product;

/**
 * ProductSearch represents the model behind the search form about `app\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'begin_date_sale_off', 'end_date_sale_off', 'category_id', 'brand_id', 'size_id', 'color_id', 'material_id', 'rate_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['product_name', 'product_code', 'product_image', 'product_price', 'product_sale_off', 'keyword', 'description'], 'safe'],
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
        $query = Product::find();

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
            'begin_date_sale_off' => $this->begin_date_sale_off,
            'end_date_sale_off' => $this->end_date_sale_off,
            'category_id' => $this->category_id,
            'brand_id' => $this->brand_id,
            'size_id' => $this->size_id,
            'color_id' => $this->color_id,
            'material_id' => $this->material_id,
            'rate_id' => $this->rate_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'product_code', $this->product_code])
            ->andFilterWhere(['like', 'product_image', $this->product_image])
            ->andFilterWhere(['like', 'product_price', $this->product_price])
            ->andFilterWhere(['like', 'product_sale_off', $this->product_sale_off])
            ->andFilterWhere(['like', 'keyword', $this->keyword])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
