<?php

namespace App\GraphQL\Queries;

use App\Models\Supplier;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

final class FsuppliersQuery
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $query = Supplier::query();
        
        if (!empty($args['excludedIds'])) {
            $query->notInIds($args['excludedIds']);
        }
        return $query->get();
    }
}
