<h1>PAGINA DE RESERVA </h1>

<div class="fondo_res">

    <h1>Reservas futbol 5</h1>

    <form class="form_reservas">
        <h4>Nombre:</h4>
        <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
        <h4>Apellido:</h4>
        <input type="text" name="nombre" placeholder="Ingrese su apellido" required>

        <h4>Predio:</h4>
        <select name="predio" required>
            <option>Sarmiento</option>
            <option>Alta Gracia</option>
            <option>Huracan</option>
            <option>Fratelli</option>
        </select>

        <h4>Cancha:</h4>
        <select name="cancha" required>
            <option>Cancha 1</option>
            <option>Cancha 2</option>
            <option>Cancha 3</option>
            <option>Cancha 4</option>
        </select>

        <br/>
        <br/>

        <label for="start">fecha</label>
            <br/><br/>
        <input type="date" id="start" name="trip-start" value="2023-7-23"  min="2023-7-23" max="2025-12-31">
            <br/>
            <br/>

        <h4>Horarios Disponibles</h4>
			<select name="horarios"required> 
				<option>17 a 18</option>
				<option>18 a 19</option>
				<option>19 a 20</option>
				<option>20 a 21</option>
				<option>21 a 22</option>
				<option>21 a 22</option>
				<option>22 a 23</option>
				<option>23 a 00</option>
			</select>

            <br><br>

        <input type="submit" name="resevar" class="btonReserva" value="Reservar Cancha"> <br>

        
    </form>
</div>
