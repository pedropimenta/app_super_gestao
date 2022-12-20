<h3>Fornecedores</h3>

{{-- @dd($fornecedores) Comentários aqui --}}


@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem menos de 10 Fornecedores</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existem vários Fornecedores</h3>
@else
    <h3>Ainda não existem Fornecedores cadastrados</h3>

@endif
