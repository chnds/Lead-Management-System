@extends('layouts.app')

@section('content')
    <body>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center bg-primary text-white">
                            <h4>Listagem de Leads</h4>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addLeadModal">Adicionar Lead</button>

                            <table class="table" id="leadsTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Os leads serão adicionados aqui via JavaScript -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
@endsection
