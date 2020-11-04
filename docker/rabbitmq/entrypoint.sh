#!/usr/bin/env bash
set -e

echo 'heartbeat = 0' >> /etc/rabbitmq/rabbitmq.conf
echo 'vm_memory_high_watermark.relative = 0.66' >> /etc/rabbitmq/rabbitmq.conf
echo 'disk_free_limit.absolute = 50MB' >> /etc/rabbitmq/rabbitmq.conf

exec "$@"
