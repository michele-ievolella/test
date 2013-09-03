<fieldset>
	<legend>Eventi</legend>
	<div style="float:left;">
		<fieldset>
			<legend>Seleziona per:</legend>
			<form action# method=post>
				<table border=0 id="teve">
					<tr>
						<td>Nome:</td>
						<td><input type=text name=nome></td>
					</tr><tr>
						<td>Citta':</td>
						<td>
							<select>
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
							</select>
						</td>
					</tr><tr>
						<td>Locale:</td>
						<td>
							<select>
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
							</select>
						</td>
					</tr><tr>
						<td>Tipo:</td>
						<td>
							<select>
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
							</select>
						</td>
					</tr><tr>
						<td>Orario:</td>
						<td>
							<select>
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
							</select>
						</td>
					</tr><tr>
						<td>Costo:</td>
						<td><input type=text name=costo></td>
					</tr><tr>
						<td>Eta' Media:</td>
						<td>
							<select>
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
							</select>
						</td>
					</tr><tr>
						<td>Giorno:</td>
						<td>
							<select>
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
							</select>
						</td>
					</tr><tr>
						<td>Mese:</td>
						<td>
							<select>
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
							</select>
						</td>
					</tr><tr>
						<td>Anno:</td>
						<td>
							<select>
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
							</select>
						</td>
					</tr><tr>
						<td>Musica:</td>
						<td>
							<select>
								<option value="volvo">Volvo</option>
								<option value="saab">Saab</option>
								<option value="mercedes">Mercedes</option>
								<option value="audi">Audi</option>
							</select>
						</td>
					</tr><tr>
						<td><input type=submit value=Cerca></td>
					</tr>
				</table>
			</form>
		</fieldset>
	</div>
	<div>
		<fieldset>
			<legend>Elenco</legend>
			{%elenco_serate%}
		</fieldset>
	</div>
</fieldset>