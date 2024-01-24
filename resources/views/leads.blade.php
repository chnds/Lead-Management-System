<!-- resources/views/leads.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Leads') }}</div>

                    <div class="card-body">
                        <!-- Adicione a tabela ou o conteúdo aqui para exibir os leads -->
                        <!-- Exemplo de tabela simples: -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <!-- Adicione mais colunas conforme necessário -->
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop pelos leads e exibição na tabela -->
                                {{-- @foreach($leads as $lead)
                                    <tr>
                                        <td>{{ $lead->id }}</td>
                                        <td>{{ $lead->name }}</td>
                                        <td>{{ $lead->email }}</td>
                                        <!-- Adicione mais colunas conforme necessário -->
                                        <td>
                                            <!-- Adicione botões de edição/exclusão aqui -->
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
