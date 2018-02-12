<?php include('layout/header.php')?>
        <main>
            <section class="banner banner-detalle">
                <div class="container">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="img/banner-detalle.jpg" alt=""></div>
                    </div>
                    <div class="title-section">
                        <h1>Detalle <br>de compra</h1>
                    </div>
                </div>
            </section>
            <section class="content-filter">
                <div class="container">
                    <div class="item_filter">
                        <h3>Flores Para:</h3>
                        <ul class="filter">
                            <li><a href="">Arreglos</a></li>
                            <li><a href="">ramos</a></li>
                            <li><a href="">cajas</a></li>
                            <li><a href="">rosas</a></li>
                            <li><a href="">floreros</a></li>
                            <li><a href="">nacimientos</a></li>
                            <li><a href="">condolencias</a></li>
                            <li><a href="">desayunos</a></li>
                            <li><a href="" class="salvate">sálvate con flores</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="content-ms">
                <div class="container">
                    <div class="item-ms">
                    
                        <h3>Productos Agregados</h3>

                        <div class="item__table_list">
                            <table>
                                <thead>
                                    <tr>
                                        <td>Imagen</td>
                                        <td>Descripción</td>
                                        <td>Cantidad</td>
                                        <td>Precio</td>
                                        <td>Total</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="Imagen"><img src="img/peluche.png" alt="" width="30"></td>
                                        <td data-label="Descripción">Tigre Te amo 30 Cm</td>
                                        <td class="cantidad" data-label="Cantidad"><span>1</span></td>
                                        <td data-label="precio">$6.500.-</td>
                                        <td data-label="Total">$6.500.-</td>
                                        <td data-label="Eliminar"><a href="#" class="close">Eliminar</a></td>
                                    </tr>
                                    <tr>
                                        <td data-label="Imagen"><img src="img/peluche.png" alt="" width="30"></td>
                                        <td data-label="Descripción">Tigre Te amo 30 Cm</td>
                                        <td class="cantidad" data-label="Cantidad"><span>1</span></td>
                                        <td data-label="precio">$6.500.-</td>
                                        <td data-label="Total">$6.500.-</td>
                                        <td data-label="Eliminar"><a href="#" class="close">Eliminar</a></td>
                                    </tr>
                                    <tr>
                                        <td data-label="Imagen"><img src="img/peluche.png" alt="" width="30"></td>
                                        <td data-label="Descripción">Tigre Te amo 30 Cm</td>
                                        <td class="cantidad" data-label="Cantidad"><span>1</span></td>
                                        <td data-label="precio">$6.500.-</td>
                                        <td data-label="Total">$6.500.-</td>
                                        <td data-label="Eliminar"><a href="#" class="close">Eliminar</a></td>
                                    </tr>
                                    <tr>
                                        <td data-label="Imagen"><img src="img/peluche.png" alt="" width="30"></td>
                                        <td data-label="Descripción">Tigre Te amo 30 Cm</td>
                                        <td class="cantidad" data-label="Cantidad"><span>1</span></td>
                                        <td data-label="precio">$6.500.-</td>
                                        <td data-label="Total">$6.500.-</td>
                                        <td data-label="Eliminar"><a href="#" class="close">Eliminar</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="item__final">
                            <a href="" class="link-final">Comprar ahora</a>
                            <a href="" class="link-final link-actualizar">Actualizar</a>
                        </div>

                        <ul class="datos">
                            <li><span>Producto: $23.000.-</span></li>
                            <li><span>Agregados: $23.000.-</span></li>
                            <li><span>Envio: $0.-</span></li>
                        </ul>

                        <div class="item__datos_compra">
                            <h3>Datos Comprador</h3>

                            <ul class="datos">
                                <li><span>Nombre:</span></li>
                                <li><span>celular:</span></li>
                                <li><span>Teléfono Fijo:</span></li>
                                <li><span>Email:</span></li>
                            </ul>
                            <ul class="datos">
                                <li><strong>Juan Perez</strong></li>
                                <li><strong>+56 95098 1123</strong></li>
                                <li><strong>+56 2 224 232 23</strong></li>
                                <li><strong>Juan@mail.cl</strong></li>
                            </ul>
                            <div class="item__final">
                                <a href="" class="link-final link-editar">Editar</a>
                            </div>
                        </div>
                        <div class="item__datos_compra">
                            <h3>Datos Comprador</h3>

                            <div class="content-form">
                                <form action="">
                                    <div class="form-group">
                                        <label for="">Nombre Destinatario *</label>
                                        <input type="text" placeholder="Example">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Teléfono Destinatario *</label>
                                        <input type="text" placeholder="Example">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Fecha Entrega *</label>
                                        <input type="date" placeholder="Example">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Rango Horario *</label>
                                        <input type="text" placeholder="Example">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Dirección Envio *</label>
                                        <input type="text" placeholder="Example">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Región*</label>
                                        <div class="select-field">
                                            <select name="region" id="regiones">
                                                <option value="">Región</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Comuna *</label>
                                        <div class="select-field">
                                            <select name="region" id="comunas">
                                                <option value="">Comuna</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Mensaje de Tarjetita *</label>
                                        <textarea name="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Datos Adicionales *</label>
                                        <textarea name="" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Código Descuento*</label>
                                        <input type="text" placeholder="Example">
                                    </div>
                                </form>
                            </div>
                            <div class="item__final">
                                <p>*Campos Obligatorios</p>
                                <a href="" class="link-final">Continuar</a>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </section>





            <section class="content-add">
                <div class="container">
                    <div class="item_add">
                        <h2>Además Agregue a su compra</h2>
                        <div class="box-add">
                            <nav class="nav-filter">
                                <ul>
                                    <li><a href="">Chocolates</a></li>
                                    <li><a href="">Peluches</a></li>
                                    <li><a href="">Globos</a></li>
                                    <li><a href="">Globos Helio</a></li>
                                    <li><a href="">Ramo de Rosas</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="add-product">
                            <div class="item___flow">
                                <div class="content-img">
                                    <label for="">
                                        Agregar
                                        <input type="checkbox" class="check">
                                    </label>
                                    <a href="#" title="enlace a ">
                                        <img src="img/peluche.png" alt="">
                                    </a>
                                </div>
                                <div class="content-description">
                                    <h3>Docena de rosas Rojas</h3>
                                    <p class="price">$20.000 - $26.690</p>
                                </div>
                            </div> 
                            <div class="item___flow">
                                <div class="content-img">
                                    <label for="">
                                        Agregar
                                        <input type="checkbox" class="check">
                                    </label>
                                    <a href="#" title="enlace a ">
                                        <img src="img/peluche.png" alt="">
                                    </a>
                                </div>
                                <div class="content-description">
                                    <h3>Docena de rosas Rojas</h3>
                                    <p class="price">$20.000 - $26.690</p>
                                </div>
                            </div> 
                            <div class="item___flow">
                                <div class="content-img">
                                    <label for="">
                                        Agregar
                                        <input type="checkbox" class="check">
                                    </label>
                                    <a href="#" title="enlace a ">
                                        <img src="img/peluche.png" alt="">
                                    </a>
                                </div>
                                <div class="content-description">
                                    <h3>Docena de rosas Rojas</h3>
                                    <p class="price">$20.000 - $26.690</p>
                                </div>
                            </div> 
                            <div class="item___flow">
                                <div class="content-img">
                                    <label for="">
                                        Agregar
                                        <input type="checkbox" class="check">
                                    </label>
                                    <a href="#" title="enlace a ">
                                        <img src="img/peluche.png" alt="">
                                    </a>
                                </div>
                                <div class="content-description">
                                    <h3>Docena de rosas Rojas</h3>
                                    <p class="price">$20.000 - $26.690</p>
                                </div>
                            </div> 
                            <div class="item___flow">
                                <div class="content-img">
                                    <label for="">
                                        Agregar
                                        <input type="checkbox" class="check">
                                    </label>
                                    <a href="#" title="enlace a ">
                                        <img src="img/peluche.png" alt="">
                                    </a>
                                </div>
                                <div class="content-description">
                                    <h3>Docena de rosas Rojas</h3>
                                    <p class="price">$20.000 - $26.690</p>
                                </div>
                            </div> 
                            <div class="item___flow">
                                <div class="content-img">
                                    <label for="">
                                        Agregar
                                        <input type="checkbox" class="check">
                                    </label>
                                    <a href="#" title="enlace a ">
                                        <img src="img/peluche.png" alt="">
                                    </a>
                                </div>
                                <div class="content-description">
                                    <h3>Docena de rosas Rojas</h3>
                                    <p class="price">$20.000 - $26.690</p>
                                </div>
                            </div> 
                            <div class="item___flow">
                                <div class="content-img">
                                    <label for="">
                                        Agregar
                                        <input type="checkbox" class="check">
                                    </label>
                                    <a href="#" title="enlace a ">
                                        <img src="img/peluche.png" alt="">
                                    </a>
                                </div>
                                <div class="content-description">
                                    <h3>Docena de rosas Rojas</h3>
                                    <p class="price">$20.000 - $26.690</p>
                                </div>
                            </div> 
                            <div class="item___flow">
                                <div class="content-img">
                                    <label for="">
                                        Agregar
                                        <input type="checkbox" class="check">
                                    </label>
                                    <a href="#" title="enlace a ">
                                        <img src="img/peluche.png" alt="">
                                    </a>
                                </div>
                                <div class="content-description">
                                    <h3>Docena de rosas Rojas</h3>
                                    <p class="price">$20.000 - $26.690</p>
                                </div>
                            </div> 
                            <div class="item___flow">
                                <div class="content-img">
                                    <label for="">
                                        Agregar
                                        <input type="checkbox" class="check">
                                    </label>
                                    <a href="#" title="enlace a ">
                                        <img src="img/peluche.png" alt="">
                                    </a>
                                </div>
                                <div class="content-description">
                                    <h3>Docena de rosas Rojas</h3>
                                    <p class="price">$20.000 - $26.690</p>
                                </div>
                            </div> 
                            <div class="item___flow">
                                <div class="content-img">
                                    <label for="">
                                        Agregar
                                        <input type="checkbox" class="check">
                                    </label>
                                    <a href="#" title="enlace a ">
                                        <img src="img/peluche.png" alt="">
                                    </a>
                                </div>
                                <div class="content-description">
                                    <h3>Docena de rosas Rojas</h3>
                                    <p class="price">$20.000 - $26.690</p>
                                </div>
                            </div> 
                            <div class="item___flow">
                                <div class="content-img">
                                    <label for="">
                                        Agregar
                                        <input type="checkbox" class="check">
                                    </label>
                                    <a href="#" title="enlace a ">
                                        <img src="img/peluche.png" alt="">
                                    </a>
                                </div>
                                <div class="content-description">
                                    <h3>Docena de rosas Rojas</h3>
                                    <p class="price">$20.000 - $26.690</p>
                                </div>
                            </div> 
                            <div class="item___flow">
                                <div class="content-img">
                                    <label for="">
                                        Agregar
                                        <input type="checkbox" class="check">
                                    </label>
                                    <a href="#" title="enlace a ">
                                        <img src="img/peluche.png" alt="">
                                    </a>
                                </div>
                                <div class="content-description">
                                    <h3>Docena de rosas Rojas</h3>
                                    <p class="price">$20.000 - $26.690</p>
                                </div>
                            </div> 
                            <div class="item___flow">
                                <div class="content-img">
                                    <label for="">
                                        Agregar
                                        <input type="checkbox" class="check">
                                    </label>
                                    <a href="#" title="enlace a ">
                                        <img src="img/peluche.png" alt="">
                                    </a>
                                </div>
                                <div class="content-description">
                                    <h3>Docena de rosas Rojas</h3>
                                    <p class="price">$20.000 - $26.690</p>
                                </div>
                            </div> 
                            <div class="item___flow">
                                <div class="content-img">
                                    <label for="">
                                        Agregar
                                        <input type="checkbox" class="check">
                                    </label>
                                    <a href="#" title="enlace a ">
                                        <img src="img/peluche.png" alt="">
                                    </a>
                                </div>
                                <div class="content-description">
                                    <h3>Docena de rosas Rojas</h3>
                                    <p class="price">$20.000 - $26.690</p>
                                </div>
                            </div> 
                            <div class="item___flow">
                                <div class="content-img">
                                    <label for="">
                                        Agregar
                                        <input type="checkbox" class="check">
                                    </label>
                                    <a href="#" title="enlace a ">
                                        <img src="img/peluche.png" alt="">
                                    </a>
                                </div>
                                <div class="content-description">
                                    <h3>Docena de rosas Rojas</h3>
                                    <p class="price">$20.000 - $26.690</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php include('layout/footer.php');?>