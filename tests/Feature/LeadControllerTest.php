<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Lead;

class LeadTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_lead()
    {
        $leadData = [
            'nome' => 'Novo Lead',
            'email' => 'novo@lead.com',
            'telefone' => '123456789',
            'empresa' => 'Minha Empresa',
            'status' => 'novo',
        ];

        $response = $this->post('/leads', $leadData);

        $response->assertStatus(201);

        $response->assertJson(['lead' => $leadData]); // Alterado para 'lead' ao invés de 'leads'
    }

    /** @test */
    public function it_can_retrieve_a_lead()
    {
        $lead = Lead::create([
            'nome' => 'Lead de Teste',
            'email' => 'teste@lead.com',
            'telefone' => '123456789',
            'empresa' => 'Empresa de Teste',
            'status' => 'novo',
        ]);

        $response = $this->get("/leads/{$lead->id}");

        $response->assertStatus(200);

        $response->assertJson(['lead' => $lead->toArray()]);
    }

    /** @test */
    public function it_can_retrieve_all_leads()
    {
        // Criar instâncias de Lead manualmente
        $leads = [
            Lead::create([
                'nome' => 'Lead 1',
                'email' => 'lead1@lead.com',
                'telefone' => '123',
                'empresa' => 'Empresa 1',
                'status' => 'novo',
            ]),
            Lead::create([
                'nome' => 'Lead 2',
                'email' => 'lead2@lead.com',
                'telefone' => '456',
                'empresa' => 'Empresa 2',
                'status' => 'em andamento',
            ]),
            Lead::create([
                'nome' => 'Lead 3',
                'email' => 'lead3@lead.com',
                'telefone' => '789',
                'empresa' => 'Empresa 3',
                'status' => 'convertido',
            ]),
        ];

        $response = $this->get('/leads');

        $response->assertStatus(200);

        $leadsArray = array_map(function ($lead) {
            return $lead->toArray();
        }, $leads);

        $response->assertJson(['leads' => $leadsArray]);

        }

        /** @test */
        public function it_can_delete_a_lead()
        {
            $lead = Lead::create([
                'nome' => 'Lead para Excluir',
                'email' => 'excluir@lead.com',
                'telefone' => '123456789',
                'empresa' => 'Empresa para Excluir',
                'status' => 'novo',
            ]);

            $response = $this->delete("/leads/{$lead->id}");

            $response->assertStatus(204);

            $this->assertDatabaseMissing('leads', ['id' => $lead->id]);
        }
        
       /** @test */
       public function it_can_update_a_lead()
       {
           $lead = Lead::create([
               'nome' => 'Lead Antigo',
               'email' => 'antigo@lead.com',
               'telefone' => '987654321',
               'empresa' => 'Empresa Antiga',
               'status' => 'antigo',
           ]);
   
           $updatedLeadData = [
               'nome' => 'Lead Atualizado',
               'email' => 'atualizado@lead.com',
               'telefone' => '123456789',
               'empresa' => 'Nova Empresa',
               'status' => 'convertido',
           ];
   
           $response = $this->put("/leads/{$lead->id}", $updatedLeadData);
   
           $response->assertStatus(200);
   
           $this->assertDatabaseHas('leads', array_merge(['id' => $lead->id], $updatedLeadData));
       }
}
