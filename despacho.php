<?php include('layout/header.php')?>
        <main>
            <section class="banner">
                <div class="container">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><img src="img/banner-1.jpg" alt=""></div>
                        <div class="item"><img src="img/banner-1.jpg" alt=""></div>
                        <div class="item"><img src="img/banner-1.jpg" alt=""></div>
                    </div>
                    <div class="title-section">
                        <h1>Despacho</h1>
                    </div>
                </div>
            </section>
            <section class="content-despacho">
                <div class="container">
                    <div class="item_despacho">
                        <div class="box-despacho">
                            <h2>Selecciona tu Producto</h2>
                            <p>
                                • La entrega de flores, regalos y/o desayunos se realiza dentro del radio 
                                urbano de Santiago con un costo de envío según la comuna a despachar. 
                                Los despachos sólo se realizan en las comunas especificadas en la tabla de precios.
                            </p>
                            <p>
                                • No se envían flores, regalos ni desayunos al extranjero.
                            </p>
                            <p>
                                • Solo se realizará la entrega de aquellos arreglos florales, desayunos y/o regalos 
                                confirmados y pagados.
                            </p>
                            <p>
                                • No se realizan despachos los días domingos y festivos, solo podría ser factible en el 
                                caso que exista un previo acuerdo vía telefónica pactado con algunos de nuestros 
                                vendedores, en este caso existe un precio especial de envío.
                            </p>
                            <p>
                                • Para días de alta demanda, como Día de la Madre y Día de los Enamorados, las entregas de 
                                las FLORES y REGALOS se realizan en dos jornadas, MAÑANA (de 8:00 a 14:00 hrs, sin hora 
                                específica de entrega) y TARDE (de 14:00 a 19:00 hrs, sin hora específica de entrega). 
                                Las entregas de DESAYUNOS se realizan en la jornada de la mañana de 8:00 a 10:00 hrs, 
                                sin hora específica de entrega. Para las entregas en días especiales de alta demanda, se 
                                recibirán pedidos hasta agotar disponibilidad en cada jornada.
                            </p>        
                        </div>

                        <div class="box-despacho">
                            <h2>Horarios de Despacho</h2>
                            <p>
                                <span class="hours">De Lunes a Viernes: </span>
                                • De 09:00 a 12:00 horas aprox. sin horario específico de entrega. Para pedidos confirmados
                                 y pagados antes de las 18:00 horas del día anterior.
                            </p>
                            <p>
                                • De 12:00 a 18:00 horas aprox. sin horario específico de entrega. Para pedidos confirmados 
                                y pagados antes de las 15:00 hrs del mismo día.
                            </p>
                            <p>
                               <span class="hours">Sábados</span>
                               • De 09:00 a 12:00 horas aprox. sin horario específico de entrega. Para pedidos confirmados y 
                               pagados antes de las 18:00 horas del día anterior.
                            </p>
                            <p>
                                <span> El despacho de DESAYUNOS</span> se realiza de Lunes a Sábado de 8:00 a 10:00 hrs.
                                Los desayunos se deben solicitar y pagar antes de las 18:00 horas del día anterior.
                            </p>
                            <p>
                            ​   <span>• El DESPACHO EXPRESS,</span> tiene un recargo adicional sobre el valor de despacho, 
                                tiene validez a contar de la hora de pago del pedido (o desde el inicio del primer rango de 
                                entrega en caso que el pedido se realice fuera del horario laboral), y sólo para pedidos 
                                solicitados antes de las 15 hrs. El DESPACHO EXPRESS NO es válido para DESAYUNOS.
                            </p> 
                            <p>
                                * Para despachos fuera de los rangos de horario normal, comuníquese con nosotros y veremos 
                                la factibilidad de despacho.
                            </p>   
                        </div>
                    </div>

                    <div class="item_simula">
                        <h2>Simula tu Despacho</h2>
                        
                        <div class="box-simula">
                            <ul>
                                <li>
                                    <div class="select-field">
                                        <select name="region" id="regiones">
                                            <option value="">Región</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="select-field">
                                        <select name="region" id="comunas">
                                            <option value="">Comuna</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <input type="submit" class="enviar" value="simular">
                                </li>
                                <li>
                                    <div class="resultado">
                                        <span>$2.900</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<?php include('layout/footer.php');?>