{{Form::open(array('route'=>'incentives.store'))}}
	<input type="text" placeholder="Incentive Name" name="name"/>
	<input type="number" placeholder="Incentive Worth" name="worth"/>
	<input type="submit" value="add incentive"/>
{{Form::close()}}
