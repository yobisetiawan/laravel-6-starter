<?php

/**
 * @OA\POST(
 * path="/api/v1/auth/login", 
 * tags={"Auth"},
 *   @OA\Parameter(ref="#/components/parameters/AuthLogin_email"), 
 *   @OA\Parameter(ref="#/components/parameters/AuthLogin_password"), 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

/**
 * @OA\POST(
 * path="/api/v1/auth/register", 
 * tags={"Auth"},
 *   @OA\Parameter(ref="#/components/parameters/AuthRegister_name"), 
 *   @OA\Parameter(ref="#/components/parameters/AuthRegister_email"), 
 *   @OA\Parameter(ref="#/components/parameters/AuthRegister_password"), 
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */

 /**
 * @OA\GET(
 * path="/api/v1/auth/logout", 
 * tags={"Auth"},
 * @OA\Response(response=200, description="", @OA\JsonContent()),
 * )
 */
