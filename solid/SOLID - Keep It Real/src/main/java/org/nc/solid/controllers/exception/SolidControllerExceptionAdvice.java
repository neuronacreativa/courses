package org.nc.solid.controllers.exception;

import org.nc.solid.response.UserResponse;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.ControllerAdvice;
import org.springframework.web.bind.annotation.ExceptionHandler;
import org.springframework.web.servlet.mvc.method.annotation.ResponseEntityExceptionHandler;

@ControllerAdvice
public class SolidControllerExceptionAdvice extends ResponseEntityExceptionHandler {
	
    @ExceptionHandler({Exception.class})
    public ResponseEntity<UserResponse> handleRestException(Exception exc) {
    	
    	return ResponseEntity.status(HttpStatus.BAD_REQUEST).body(null);
    }

}
