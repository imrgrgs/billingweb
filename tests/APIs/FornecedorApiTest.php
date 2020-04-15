<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Fornecedor;

class FornecedorApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_fornecedor()
    {
        $fornecedor = factory(Fornecedor::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/fornecedores', $fornecedor
        );

        $this->assertApiResponse($fornecedor);
    }

    /**
     * @test
     */
    public function test_read_fornecedor()
    {
        $fornecedor = factory(Fornecedor::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/fornecedores/'.$fornecedor->for_id
        );

        $this->assertApiResponse($fornecedor->toArray());
    }

    /**
     * @test
     */
    public function test_update_fornecedor()
    {
        $fornecedor = factory(Fornecedor::class)->create();
        $editedFornecedor = factory(Fornecedor::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/fornecedores/'.$fornecedor->for_id,
            $editedFornecedor
        );

        $this->assertApiResponse($editedFornecedor);
    }

    /**
     * @test
     */
    public function test_delete_fornecedor()
    {
        $fornecedor = factory(Fornecedor::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/fornecedores/'.$fornecedor->for_id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/fornecedores/'.$fornecedor->for_id
        );

        $this->response->assertStatus(404);
    }
}
