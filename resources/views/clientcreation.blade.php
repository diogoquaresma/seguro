<!doctype html>
<html>
    <head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">        <title></title>

    </head>
    <body>

@if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif



{!! Form::open(['url' => '/clientcreated', 'class' => 'form-horizontal']) !!}
        <fieldset>

            <h5>Tipo de Apólice</h5>

                <div class="form-group">
                    {!! Form::label('seguro', 'Seguro:', ['class' => 'col-lg-2 control-label']) !!}
                    <div class="col-lg-10">
                        {!! Form::radio('seguro', '1', ['class' => 'form-control']) !!} Novo Seguro
                    </div>
                    <div class="col-lg-10">
                        {!! Form::radio('seguro', $value = null, ['class' => 'form-control']) !!} Alteração de Seguro
                    </div>
                </div>

            <h5>Pessoa Segura</h5>

            <div class="form-group">
                {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('email', $value = null, ['class' => 'form-control', 'placeholder' => 'exemple@xxx.com']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('telemovel', 'Telemóvel:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::number('telemovel', $value = null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('morada', 'Morada:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::number('morada', $value = null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('zip', 'Código Postal:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::number('zip', $value = null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('localidade', 'Localidade:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('localidade', $value = null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('nascimento', 'Data de Nascimento:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::date('nascimento', $value = null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('cc', 'Nº BI/CC:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::number('cc', $value = null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('nif', 'NIF:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::number('nif', $value = null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('profissao', 'Profissão:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::textarea('nif', $value = null, ['class' => 'form-control', 'placeholder' => '(descrição detalhada da acividade)']) !!}
            </div>

              <h12>Declaração: Declaro sentir-me de boa saúde e não ter conhecemento de sofrer qualquer doença ou alteração ao meu estado de saúde,
e não me ter sido recusado, adiado ou aceite em condições especiais qualquer seguro de acidentes, saúde ou vida.</h12>

            <div class="form-group">
                {!! Form::label('data', 'Data:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::date('data', $value = null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('assinatura', 'Assinatura:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('assinatura', $value = null, ['class' => 'form-control']) !!}
            </div>
            </form>
            <!-- Submit Button -->
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    {!! Form::submit('Submit', ['class' => 'btn btn-primary'] ) !!}
                </div>
            </div>

            <h5>Tomador do Seguro</h5>

            <div class="form-group">
                {!! Form::label('Ename', 'Name/Empresa:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('Ename', $value = null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('Eemail', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('Eemail', $value = null, ['class' => 'form-control', 'placeholder' => 'exemple@xxx.com']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('Etelefone', 'Telefone:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::number('Etelemovel', $value = null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('Emorada', 'Morada:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::number('Emorada', $value = null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('Ezip', 'Código Postal:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::number('Ezip', $value = null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('Elocalidade', 'Localidade:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('Elocalidade', $value = null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('nif', 'NIF:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::number('nif', $value = null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('empresa', 'Actividade da Empresa:', ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! Form::text('empresa', $value = null, ['class' => 'form-control', 'placeholder' => '(descrição detalhada da acividade)']) !!}
            </div>

            <h5>Questionário Confidêncial</h5>

            <ol>
                <li>
                    <div class="form-group">
                        {!! Form::label('peg1', 'Sofreu ou sofre de tensão alta, doenças cardíacas, febre reumatismal, diabetes, cancro, doenças pulmonares, distúrbios nervosos,
perturbações de órgãos abdominais ou outra?', ['class' => 'col-lg-2 control-label'])    !!}
                        <div class="col-lg-10">
                            {!! Form::radio('peg1', '1', ['class' => 'form-control']) !!} Sim
                        </div>
                        <div class="col-lg-10">
                            {!! Form::radio('peg1', '0', ['class' => 'form-control']) !!} Não
                        </div>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        {!! Form::label('peg2',          'Já se submeteu a alguma intervenção cirúrgica ou sofre de algum defeito congénito, deformação física, perda de audição ou visão?', ['class' => 'col-lg-2 control-label'])    !!}
                        <div class="col-lg-10">
                            {!! Form::radio('peg2', '1', ['class' => 'form-control']) !!} Sim
                        </div>
                        <div class="col-lg-10">
                            {!! Form::radio('peg2', '0', ['class' => 'form-control']) !!} Não
                        </div>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        {!! Form::label('peg3', 'No último ano submeteu-se a algum meio complementar de diagnóstico?', ['class' => 'col-lg-2 control-label'])    !!}
                        <div class="col-lg-10">
                            {!! Form::radio('peg3', '1', ['class' => 'form-control']) !!} Sim
                        </div>
                        <div class="col-lg-10">
                            {!! Form::radio('peg3', '0', ['class' => 'form-control']) !!} Não
                        </div>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        {!! Form::label('peg4', 'Algum dos seus familiares sofre ou sofreu de diabetes, hipertensão, problemas cardiovasculares ou mentais?', ['class' => 'col-lg-2 control-label'])    !!}
                        <div class="col-lg-10">
                            {!! Form::radio('peg4', '1', ['class' => 'form-control']) !!} Sim
                        </div>
                        <div class="col-lg-10">
                            {!! Form::radio('peg4', '0', ['class' => 'form-control']) !!} Não
                        </div>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        {!! Form::label('peg5', 'Esteve ou está em situação de Incapacidade Temporária por períodos superiores a três meses?', ['class' => 'col-lg-2 control-label'])    !!}
                        <div class="col-lg-10">
                            {!! Form::radio('peg5', '1', ['class' => 'form-control']) !!} Sim
                        </div>
                        <div class="col-lg-10">
                            {!! Form::radio('peg5', '0', ['class' => 'form-control']) !!} Não
                        </div>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        {!! Form::label('peg6', 'Sofre ou sofreu de alguma doença que o torne susceptível a acidentes?', ['class' => 'col-lg-2 control-label'])    !!}
                        <div class="col-lg-10">
                            {!! Form::radio('peg6', '1', ['class' => 'form-control']) !!} Sim
                        </div>
                        <div class="col-lg-10">
                            {!! Form::radio('peg6', '0', ['class' => 'form-control']) !!} Não
                        </div>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        {!! Form::label('peg7', 'Desloca-se com frequência na sua actividade profissional?', ['class' => 'col-lg-2 control-label'])    !!}
                        <div class="col-lg-10">
                            {!! Form::radio('peg7', '1', ['class' => 'form-control']) !!} Sim
                        </div>
                        <div class="col-lg-10">
                            {!! Form::radio('peg7', '0', ['class' => 'form-control']) !!} Não
                        </div>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        {!! Form::label('peg8', 'Já foi vítima de algum acidente corporal?', ['class' => 'col-lg-2 control-label'])    !!}
                        <div class="col-lg-10">
                            {!! Form::radio('peg8', '1', ['class' => 'form-control']) !!} Sim
                        </div>
                        <div class="col-lg-10">
                            {!! Form::radio('peg8', '0', ['class' => 'form-control']) !!} Não
                        </div>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        {!! Form::label('peg9', 'É canhoto?', ['class' => 'col-lg-2 control-label'])    !!}
                        <div class="col-lg-10">
                            {!! Form::radio('peg9', '1', ['class' => 'form-control']) !!} Sim
                        </div>
                        <div class="col-lg-10">
                            {!! Form::radio('peg9', '0', ['class' => 'form-control']) !!} Não
                        </div>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        {!! Form::label('peg10', 'É titular de algum pensão de invalidez?', ['class' => 'col-lg-2 control-label'])    !!}
                        <div class="col-lg-10">
                            {!! Form::radio('peg10', '1', ['class' => 'form-control']) !!} Sim
                        </div>
                        <div class="col-lg-10">
                            {!! Form::radio('peg10', '0', ['class' => 'form-control']) !!} Não
                        </div>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        {!! Form::label('peg11', 'Peso e Altura', ['class' => 'col-lg-2 control-label'])    !!}
                        <div class="col-lg-10">
                            {!! Form::number('peg11', $value = null, ['class' => 'form-control']) !!} Peso
                        </div>
                        <div class="col-lg-10">
                            {!! Form::number('peg11', $value = null, ['class' => 'form-control']) !!} Altura
                        </div>
                    </div>
                </li>
                <li>
                    <div class="form-group">
                        {!! Form::label('peg12', 'Rendimento Anual:', ['class' => 'col-lg-2 control-label'])    !!}
                        <div class="col-lg-10">
                            {!! Form::radio('peg12', '$value = null', ['class' => 'form-control']) !!} Até 20.000€
                        </div>
                        <div class="col-lg-10">
                            {!! Form::radio('peg12', '$value = null', ['class' => 'form-control']) !!} Entre 20.000€ e 40.000€
                        </div>
                        <div class="col-lg-10">
                            {!! Form::radio('peg12', '$value = null', ['class' => 'form-control']) !!} Entre 40.000€ e 60.000€
                        </div>
                        <div class="col-lg-10">
                            {!! Form::radio('peg12', '$value = null', ['class' => 'form-control']) !!} Superior a 60.000€
                        </div>
                    </div>
                </li>
            </ol>

            <h5>Se respondeu afirmativamente a qualquer questão, detalhe por favor:</h5>
            <textarea></textarea>

            <h6>Campo reservado aos serviços da companhia:</h6>
            <textarea></textarea>

            <h5>Beneficios por Morte</h5>




        </fieldset>

        {!! Form::close()  !!}

    </div>





    </body>

</html>
