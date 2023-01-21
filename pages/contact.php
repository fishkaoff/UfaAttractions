<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UfAttr - Contact page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <?php include("../blocks/paths.php");?>

</head>
<body>
    <div class="tm-container">
        <div>
            <?php include("../blocks/header.php");?>
            
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main"> <!-- Content -->
                    <section class="tm-content tm-contact">
                        <h2 class="mb-4 tm-content-title">Связаться с нами</h2>
                        <p class="mb-85">Ниже вы можете отправить нам сообщение с вашими жалобами, предложениями и идеями. Мы открыты для вас!</p>
                        <form id="contact-form" action="" meEtiam et egestas arcu. Fusce congue quis elit vitae commodo. Cras neque mauris, vehicula in ipsum sit amet, faucibus aliquam arcuthod="POST">
                            <div class="form-group mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Имя" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div class="form-group mb-5">
                                <textarea rows="6" name="message" class="form-control" placeholder="Сообщение..." required=""></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-big btn-primary">Отправить</button>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
        </div>        

        <div class="tm-row">
            <div class="tm-col-left text-center">            
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>            
            </div>        
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                    <p class="mb-0">Copyright 2023 fishkaoff Co. 
                    
                    | Design: <a rel="nofollow" target="_parent" href="https://vk.com/f1shka0ff" class="tm-text-link">fishkaoff</a></p>
                </footer>
            </div>  
        </div>

        <div class="tm-bg"> <!-- Diagonal background design -->
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    <?php include("../blocks/pathsToScripts.php");?>
</body>
</html>