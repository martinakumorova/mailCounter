<div class="mailPlacementCounter-default-index">

    <div class="mailPlacementCounter-default-index">

        <div class="container">


            <ul class="list-group">
                <li class="list-group-item active">
                    <span class="badge">Počet všetkých mailov <?php echo $count[0];?> </span>
                    Gmail
                </li>
                <li class="list-group-item">
                    <?php $percent=($model[0]/$count[0])*100; ?>
                    <span class="badge"><?php echo $model[0].'   ('.$percent.'%)';?></span>
                    Počet mailov v bežnej pošte
                </li>
                <li class="list-group-item">
                    <?php $percent=($model[1]/$count[0])*100; ?>
                    <span class="badge"><?php echo $model[1].'   ('.$percent.'%)';?></span>
                    Počet mailov v spame
                </li>
            </ul>

            <ul class="list-group">
                <li class="list-group-item active">
                    <span class="badge">Počet všetkých mailov <?php echo $count[1];?></span>
                    Centrum
                </li>
                <li class="list-group-item">
                    <?php $percent=($model[2]/$count[1])*100; ?>
                    <span class="badge"><?php echo $model[2].'   ('.$percent.'%)';?></span>
                    Počet mailov v bežnej pošte
                </li>
                <li class="list-group-item">
                    <?php $percent=($model[3]/$count[1])*100; ?>
                    <span class="badge"><?php echo $model[3].'   ('.$percent.'%)';?></span>
                    Počet mailov v spame
                </li>
                <li class="list-group-item">
                    <?php $percent=($model[4]/$count[1])*100; ?>
                    <span class="badge"><?php echo $model[4].'   ('.$percent.'%)';?></span>
                    Počet mailov v hromadnej pošte
                </li>
            </ul>

            <ul class="list-group">
                <li class="list-group-item active">
                    <span class="badge">Počet všetkých mailov <?php echo $count[2];?></span>
                    Seznam
                </li>
                <li class="list-group-item">
                    <?php $percent=($model[5]/$count[2])*100; ?>
                    <span class="badge"><?php echo $model[5].'   ('.$percent.'%)';?></span>
                    Počet mailov v bežnej pošte
                </li>
                <li class="list-group-item">
                    <?php $percent=($model[6]/$count[2])*100; ?>
                    <span class="badge"><?php echo $model[6].'   ('.$percent.'%)';?></span>
                    Počet mailov v spame
                </li>
                <li class="list-group-item">
                    <?php $percent=($model[7]/$count[2])*100; ?>
                    <span class="badge"><?php echo $model[7].'   ('.$percent.'%)';?></span>
                    Počet mailov v hromadnej pošte
                </li>
            </ul>

        </div>

    </div>

</div>
