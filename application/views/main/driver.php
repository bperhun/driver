<header class="masthead" style="background-image: url('/public/images/about-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1>Водії</h1>
                    <span class="subheading">Список водіїв</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        <form action="/contact" method="GET">
        <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <p><input type="text" class="form-control" name="town" placeholder="Введіть місто"></p>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary" id="sendMessageButton">Шукати</button>
                </div>
        </form>
            <?php if (empty($list)): ?>
                <p>Список постов пуст</p>
            <?php else: ?>
                <?php foreach ($list as $val): ?>
                    <div class="post-preview">
                   
                            <h2 class="post-title"><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></h2>
                            <h5 class="post-subtitle"><?php echo htmlspecialchars($val['email'], ENT_QUOTES); ?></h5>
                            <h5 class="post-subtitle"><?php echo htmlspecialchars($val['town'], ENT_QUOTES); ?></h5>
                            <h5 class="post-subtitle"><?php echo htmlspecialchars($val['phone'], ENT_QUOTES); ?></h5>
                       
                        <p class="post-meta">Идентфикатор этого поста <?php echo $val['id']; ?></p>
                    </div>
                    <hr>
                <?php endforeach; ?>
                <div class="clearfix">
                    <?php echo $pagination; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>