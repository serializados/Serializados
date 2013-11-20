class peliculas extends JControllerBase
{
	/**
	 * Method to execute the controller.
	 *
	 * @return  void
	 *
	 * @since   12.1
	 * @throws  RuntimeException
	 */
	public function execute()
	{
		echo "hola";
	}
}

// Instantiate the controller.
$controller = new peliculas();

// Print the time.
$controller->execute();